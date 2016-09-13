<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Route;

class PageController extends Controller {

    private $search_routes = array(
	'',
	'new/about',
	'new/events',
	'new/testimonial',
	'new/service/index',
	'new/service/enterprise_software',
	'copyright',
	'privacy',
	'terms_of_use',
	'new/service/database_design',
	'new/service/linux_administration',
	'new/service/mobile_apps',
	'new/service/payment_integration',
	'new/product/file_tracking',
	'new/product/karibusms',
	'new/product/rn',
	'new/product/shulesoft',
	'new/product/staytz',
	'new/product/stock_manager',
	'new/contact_us',
	'new/products',
    );

    public function home() {
	return view('index');
    }

    public function product($product) {
	return view('website.products.' . $product);
    }

    public function service($service) {

	return view('website.services.' . $service);
    }

    public function open_page($page) {
	if ($page != ('terms_of_use' || 'privacy' || 'copyright')) {
	    $return = view('website.' . $page);
	} else {
	    $return = view('website.legal.' . $page);
	}
	return $return;
    }

    public function search() {
	$tag = request('s');
	$content = $this->searchInFiles(strtolower($tag));
	return view('website.search_result', compact('content'));
    }

    private function searchInFiles($searchthis) {
	$matches = array();
	foreach ($this->search_routes as $routes) {
	    $file = url('/') . '/' . $routes;
	    $html = file_get_contents($file);
	    if (strpos(strtolower($html), $searchthis) !== false) {
		$data = array($file, $searchthis);
		array_push($matches, $data);
	    } else {
		$matches = array();
	    }
	}
	return $matches;
    }

    function getplaintextintrofromhtml($url) {
	include 'simple_html_dom.php';

	$html = file_get_html($url);
	// point to the body, then get the innertext
	$data = $html->find('body', 0)->innertext;
	return $data;
    }

}
