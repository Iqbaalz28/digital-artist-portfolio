<?php defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Dom_pdf extends Dompdf
{

    protected function ci()
    {
        return get_instance();
    }

    public function load_view($view, $data = array())
    {
        $html = $this->ci()->load->view($view, $data, TRUE);
        $this->loadHtml($html);
        $this->render();
        $this->stream($this->filename, array("Attachment" => false));
    }
}
