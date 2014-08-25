<div class="col-md-12">
    <div class="panel panel-archon">
        <div class="panel-heading">
            <h3 class="panel-title">
                Panel With Heading
                <span class="pull-right">
                    <a href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="panel-settings"><i class="fa fa-cog"></i></a>
                    <a href="#" class="panel-close"><i class="fa fa-times"></i></a>
                </span>
            </h3>
        </div>
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Email</div>
                <?php
                //$content = file_get_contents('https://cp1.runhosting.com/beta/');

                // to specify http headers like `User-Agent`,
                // you could create a context like so:
                $options = array(
                    'http' => array(
                        'method' => "GET",
                        'header' => "User-Agent: PHP\r\n"
                    )
                );
                // create context
                //print_r($content);
                $context = stream_context_create($options);
                // open file with the above http headers
                $email='https://www.mailindeed.com/webmail/';
                $gmail='';
             echo  $content = file_get_contents('https://mail.google.com/mail/u/0/#inbox', false, $context);
                ?>
            </div>
        </div>
    </div>
</div>