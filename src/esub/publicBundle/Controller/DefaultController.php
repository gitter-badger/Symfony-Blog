<?php

namespace esub\publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Clean;
use Uploader;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
    *@Route("/clean", name="clean")
    *
    */
    public function cleanAction(){

        header('Pragma: no-cache');
        header('Cache-Control: private, no-cache');
        header('Content-Disposition: inline; filename="files.json"');
        header('X-Content-Type-Options: nosniff');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');
        header('Vary: Accept');

        $uploader = new Uploader();

        if (isset($_SERVER['HTTP_ACCEPT']) &&
            (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)) {
            header('Content-type: application/json');
        } else {
            header('Content-type: text/plain');
        }
        
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'OPTIONS':
            break;
            case 'HEAD':
            case 'GET':
                $uploader::get();
            break;
            case 'POST':
                $uploader::post();
            break;
            case 'DELETE':
                $uploader::delete();
            break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
        }
    }

        public function download(){
        $user_unic_id = $this->session->userdata('user_uniq_id');
        $temp_dir_path = BASEPATH.'../uploads/temp/'.$user_unic_id;
        
        $this->load->library('CS');
        $zip = new ZipArchive;
        $files = glob($temp_dir_path.'/*');
        $zip_name = FALSE;
        $subtitles_extensions = array('str','srt','sub','txt');
        $arhive_extensions = array('rar','zip');
        $files_to_arhive = array();
        
        
        if(count($files) > 0){
            foreach ($files as $key => $file){
                $file_info = pathinfo($file);
                if(in_array($file_info['extension'], $subtitles_extensions)){
                    $clean_name =  SETTINGS_WEBSITE_FOR_TITLES.'_'.preg_replace('/(www(\.|\_|\-|\s)(.*)(\.|\_|\-|\s)(ro|com|net|info|org|eu)(\.|\_|\-|\s)|(.*)(\.|\_|\-|\s)(ro|com|net|info|org|eu)(\.|\_|\-|\s))/', '', $file_info['basename']);
                    $files_to_arhive[$key]['clean_name'] = $clean_name;
                    $files_to_arhive[$key]['real_name'] = $file_info['basename'];
                    if(!$zip_name){
                        $zip_name = substr($clean_name, 0, -4).'.zip';
                    }
                }elseif(in_array($file_info['extension'], $arhive_extensions)){
                    $zip_name = $file_info['basename'];
                }
            }
            
        }
        $zip_path = $temp_dir_path.'/'.$zip_name;
        if(count($files_to_arhive) > 0){
            $opened = $zip->open($zip_path, ZIPARCHIVE::CREATE);
            
            foreach($files_to_arhive as $file){
                $zip->addFile($temp_dir_path.'/'.$file['real_name'], $file['clean_name']);
            }
            $zip->setArchiveComment($this->load->view('includes/arhive_comment', array(), TRUE));
            if($zip->close()){
                foreach ($files_to_arhive as $file){
                    unlink($temp_dir_path.'/'.$file['real_name']);
                }
                
            }
        }
        header('Content-Description: File Transfer');
        header('Content-Type: '.mime_content_type($zip_path));
        header("Content-Disposition: attachment; filename=\"$zip_name\"");
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($zip_path));
        //flush();
        readfile($zip_path);
        
        
    }

}
