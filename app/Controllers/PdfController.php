<?php namespace App\Controllers;

use App\Models\PdfModel;

class PdfController extends BaseController
{

    public function index()
    {
        return view('pdf_view');
    }


    public function getAllData()
    {
        $model = new PdfModel();
        $details = $model->findAll();

        if($details)
            $data = ['title' => 'HTML to PDF Converter',
                'table' => $details
            ];
        else
            $data = ['title' => 'Data Not Found'];

        return view('get_all', $data);
    }


    public function viewSinglePage($id)
    {
        $model = new PdfModel();
        $detail = $model->find($id);

        if($detail)
            $data = [
                'title' => 'Record found successfully!',
                'row' => $detail
            ];

        else
            $data = [
                'title' => 'Record could not be found'
            ];

        return view('single_page', $data);


    }

    public function htmlToPDF($id)
    {
        $model = new PdfModel();
        $detail = $model->find($id);

        if($detail)
            $data = [
                'title' => 'Record found successfully!',
                'row' => $detail
            ];

        else
            $data = [
                'title' => 'Record could not be found'
            ];

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('pdf_page', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('details.pdf');
    }

}
