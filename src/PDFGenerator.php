<?php

namespace Longi;

use Illuminate\View\View;
use MongoDB\Laravel\Eloquent\Model;
use Mpdf\Mpdf;
use Mpdf\MpdfException;

class PDFGenerator extends Mpdf
{
    /**
     * @param array $config
     * @param $container
     * @throws MpdfException
     */
    public function __construct(array $config = [], $container = null)
    {
        parent::__construct($config, $container);
    }

    /**
     * @param string $nomeView
     * @param array $variaveis
     * @param bool $addPage
     * @return void
     * @throws MpdfException
     */
    public function addPageOnPdfWithView(string $nomeView, array $variaveis, bool $addPage = true): void
    {
        $view = \Illuminate\Support\Facades\View::make($nomeView)->with($variaveis);
        $html = $view->render();
        parent::WriteHTML($html);
        if($addPage){
            parent::AddPage();
        }
    }
    /**
     * @param string $tela
     * @param string $nomeView
     * @param Model $dadosObj
     * @return void
     * @throws MpdfException
     */
    public function generatePDFWithView(string $tela): void
    {
        ob_clean();
        parent::Output('relatorio_'. $tela .'.pdf', 'D');
    }
}
