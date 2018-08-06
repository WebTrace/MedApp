<?Php
    class Email_model extends CI_model
    {
        public function signup_content($url)
        {
            $output = "<!DOCTYPE html>
            <html>
                <head></head>
                <body>
                    <div style='padding: 20px;'>
                        <div style=''>
                            <h3>CLAIMA account activation needed</h3>
                        </div>
                        <div style=''>
                            <p>You are almost there. Please click the following link to activate your account</p>
                            <p>
                                <a href='$url' style=''>Activate account</a>
                            </p>
                            <p>Or, please copy the link and pasteit in a browser. $url</p>
                        </div>
                    </div>
                </body>
            </html>
            ";
            
            return $output;
        }
    }
?>