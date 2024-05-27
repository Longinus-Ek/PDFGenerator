## Biblioteca utilizada para geração de PDFs com biblioteca Mpdf/mpdf, com diferencial gerador por Views do Laravel >= 9.x

## Instalação

```php
composer require longinus/pdf-generator
```

## Utilização


```php
$pdf = new PDFGenerator(['margin_left' => 5,   // Margem esquerda em px
            'margin_right' => 5,  // Margem direita em px
            'margin_top' => 5,    // Margem superior em px
            'margin_bottom' => 5, // Margem inferior em px
            'autopagebreak' => true]);
            //Aceitando configurações padrões da biblioteca Mpdf/mpdf
            
//Adição de paginas através de views
$pdf->addPageOnPdfWithView('caminho.da.view.padrão.View.laravel', ['DadosUtilizadosNaView' => $dados], false //Caso queira adicionar uma proxima página passar true); 

$pdf->generatePDFWithView('movimento_bancario') //Baixar PDF;
```

## Autor
### Érick Dias (derickbass4@gmail.com)

## Licença
### O PDFGenerator é licenciado sob licença MIT
