<?php
class Model
{
    protected $name;
    protected $list;
    protected $email;
    protected $area;
    protected $dataArray = array();
    protected $propertis = array();
    public function __construct()
    {
        $this->dataArray['%TITLE%'] = 'FORM';
        $this->dataArray['%ERRORS_FIELDS%'] = 'EMPTY INPUTS';
        $this->dataArray['%SELECT_0%'] = SEL_0;
        $this->dataArray['%SELECT_1%'] = SEL_1;
        $this->dataArray['%SELECT_2%'] = SEL_2;
        $this->dataArray['%SELECT_3%'] = SEL_3;
        $this->dataArray['%sel_one%'] = 'selected="selected"';
        $this->dataArray['%sel_two%'] = '';
        $this->dataArray['%sel_three%'] = '';
        $this->dataArray['%sel_fourth%'] = '';
        $this->dataArray['%ERROR_LIST%'] = '';
        $this->dataArray['%NAME%'] = '';
        $this->dataArray['%ERROR_NAME%'] = '';
        $this->dataArray['%EMAIL%'] = '';
        $this->dataArray['%ERROR_EMAIL%'] = '';
        $this->dataArray['%AREA%'] = '';
        $this->dataArray['%ERROR_AREA%'] = '';
        $this->dataArray['%SUCCES_MAIL%'] = '';
        $this->dataArray['%ERROR_SEND%'] = '';
	$this->propertis = array('name'=>'','list'=>'','email'=>'','area'=>'');
    }
    public function getArray()
    {
        return $this->dataArray;
    }
    public function checkForm()
    {
        $this->dataArray['%ERRORS_FIELDS%'] = '';
        $this->checkName();
        $this->checkList();
        $this->checkEmail();
        $this->checkArea();
        if (($this->checkName()) && ($this->checkList()) && ($this->checkEmail()) && ($this->checkArea()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function checkName()
    {
        if (!empty($_POST['name'])) {
            $this->dataArray['%NAME%'] = $_POST['name'];
            $this->propertis['name'] = $_POST['name'];
            return true;
        } else {
            $this->dataArray['%ERROR_NAME%'] = "Empty name";
            $this->dataArray['%NAME%'] = $_POST['name'];
            return false;
        }
    }
    public function checkEmail()
    {
        if (!empty($_POST['email']))
        {
            $this->dataArray['%EMAIL%'] = $_POST['email'];
           $this->propertis['email'] = $_POST['email'];
            return true;
        }
        else
        {
            $this->dataArray['%EMAIL%'] = $_POST['email'];
            $this->dataArray['%ERROR_EMAIL%'] = 'Emty input email';
            return false;
        }
    }
    public function checkArea()
    {
        if(!empty($_POST['msg']))
        {
            $this->dataArray['%AREA%'] = $_POST['msg'];
            $this->propertis['area'] = $_POST['msg'];
            return true;
        }
        else
        {
            $this->dataArray['%AREA%'] = $_POST['msg'];
            $this->dataArray['%ERROR_AREA%'] = 'Empty input area';
            return false;
        }
    }
    public  function checkList()
    {
        if ($_POST['subject'] != 0)
        {
            switch ($_POST['subject'])
            {
                case 1:
                   $this->propertis['list'] = SEL_1;
                    break;
                case 2:
                    $this->propertis['list']  = SEL_2;
                    break;
                case 3:
                    $this->propertis['list']  = SEL_3;
                    break;
            }
            return true;
        }
        else
        {
            $this->dataArray['%ERROR_LIST%'] = 'Please make a choise!';
            return false;
        }
    }
    public function sendEmail()
    {
        date_default_timezone_set('Europe/Kiev');
        $message = 'From who: '.$this->propertis['name']."\n";
        $message .= 'Message: ' . $this->propertis['area'] . "\n";
        $message .= "\n".'IP: '. $_SERVER['REMOTE_ADDR']. "\n";
        $message .= 'Date: '.date("Y-m-d");
        $header = 'From: '.$this->propertis['email'] . "\n" . 'Content-type: text/html; charset=utf-8' . "\n" . 'Reply-To: '. $this->propertis['email'] . "\n" ;
        $sendMail = mail(EMAIL, $this->propertis['list'], $message, $header);
        if ($sendMail)
        {
            $this->dataArray['%SUCCES_MAIL%'] = 'Mail sent!';
            return true;
        }
        else
        {
            $this->dataArray['%ERROR_SEND%'] = 'Error send';
            return false;
        }
	}		
}
?>
