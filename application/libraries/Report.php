<?php


/**
 * Created by PhpStorm.
 * User: PC-06
 * Date: 13/02/2019
 * Time: 10:20
 */

class Report
{
    public function __construct()
    {
        $this->ci =& get_instance();
    }

    /**
     * @param array $data
     * @param string $page
     * @param string $size
     * @param string $orientation
     * @param bool $perPage
     * @param bool $toPdf
     */
    public function paper($data = [], $page = '', $orientation = 'p', $perPage = false, $toPdf = false){
        $var = [
            'page'          => $page,
            'orientation'   => $orientation,
            'data'          => $data
        ];
        if($toPdf){
            if($perPage){
                $html = $this->ci->load->view('template/paper/per_page',$var,true);
            }else{
                $html = $this->ci->load->view('template/paper/full_page',$var,true);
            }
//            $this->createPdf($html,'',$orientation);
//            $this->createPdf($html);
            return $html;
        }else{
            if($perPage){
                $this->ci->load->view('template/paper/per_page',$var);
            }else{
                $this->ci->load->view('template/paper/full_page',$var);
            }
        }
    }

    /**
     * @param string $html
     * @param string $name
     */
    public function createPdf($html = ''){
		$html2pdf = new Html2Pdf();
		$html2pdf->writeHTML($html);
		try
		{
			$html2pdf->output();
		} catch (Html2PdfException $e)
		{
			echo "errorrr";
		}
    }
}
