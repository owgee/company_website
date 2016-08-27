<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Requests;


class AdminController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portfolios = Portfolio::all();
        return view('sentinel.portfolio.index',['portfolios'=>$portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clients = Client::all();
        return view('sentinel.portfolio.create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'portfolioname' => 'required|unique:portfolio|max:255',
            'description' => 'required',
        ]);
        $portfolio = new Portfolio($request->all());
        $portfolio->user()->associate(\Sentry::getUser()->id);
        $portfolio->client()->associate(Client::find(1)->value('client_id'));
        if($portfolio->save())
            return redirect('portfolio')->with('success', 'Portfolio Created!');
        return redirect('portfolio')->with('error', 'Could not be Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $portfolio = Portfolio::find($id);
        return view('sentinel.portfolio.edit',['portfolio'=>$portfolio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $portfolio = Portfolio::find($id);
        if($portfolio->update($request->except('_token','_method','action')))

            return redirect('portfolio')->with(['success'=>$portfolio->portfolioname.' Successfully updated!']);
        return redirect('portfolio')->with(['error'=>$portfolio->portfolioname.' Not updated!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p=Portfolio::find($id);
        if($p && $p->delete()){

            return redirect('portfolio')->with('success', $p->portfolioname.' Successfully deleted');
        }else{
            return redirect('portfolio')->with('error',  $p->portfolioname.' Failed to delete! ');

        }
    }

    public function contact(){


        $this->validate(request(), [
            'name' => 'required|max:255',
            'message' => 'required',
            'phone'=>'required',
            'email'=>'required'
        ]);

        function isEmail($email) {
            return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
        }

        if($_POST) {

            // Enter the email where you want to receive the notification when someone sends a message!
            $emailTo = 'owdeng@gmail.com';

            $email = request('email');
             $subscriber_email = addslashes(trim($email));
            $subscriber_name = request('name');
            $message = request('message');

            if(!isEmail($subscriber_email)) {
                $array = array();
                $array['valid'] = 0;
                $array['message'] = 'Insert a valid email address!';
                return redirect('new/contact_us')->with('error', 'Input a valid email address!');
            }
            else {
                $array = array();
                $array['valid'] = 1;
                $array['message'] = 'Thanks for your subscription!';


                // Send email
                $subject = 'New Message [INETS Website]!';
                $body = "You have a new message!\n\nEmail: " . $subscriber_email . "\n\nName: " . $subscriber_name."\n\nMessage: ". $message ;
                // uncomment this to set the From and Reply-To emails, then pass the $headers variable to the "mail" function below
                 $headers = "From: ".$subscriber_email." <" . $subscriber_email . ">" . "\r\n" . "Reply-To: " . $subscriber_email;

               if( mail($emailTo, $subject, $body,$headers))
                   return redirect('new/contact_us')->with('success', 'Your message has been sent!');
                return redirect('new/contact_us')->with('error', 'Your message could not be sent!');
            }

        }

    }
}
