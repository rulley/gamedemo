<?php

namespace Kendo\UI;

class EditorPdf extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The author of the PDF document.
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function author($value) {
        return $this->setProperty('author', $value);
    }

    /**
    * A flag indicating whether to produce actual hyperlinks in the exported PDF file.It's also possible to pass a CSS selector as argument. All matching links will be ignored.
    * @param boolean|string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function avoidLinks($value) {
        return $this->setProperty('avoidLinks', $value);
    }

    /**
    * The creator of the PDF document.
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function creator($value) {
        return $this->setProperty('creator', $value);
    }

    /**
    * The date when the PDF document is created. Defaults to new Date().
    * @param date $value
    * @return \Kendo\UI\EditorPdf
    */
    public function date($value) {
        return $this->setProperty('date', $value);
    }

    /**
    * Specifies the file name of the exported PDF file.
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function fileName($value) {
        return $this->setProperty('fileName', $value);
    }

    /**
    * If set to true, the content will be forwarded to proxyURL even if the browser supports saving files locally.
    * @param boolean $value
    * @return \Kendo\UI\EditorPdf
    */
    public function forceProxy($value) {
        return $this->setProperty('forceProxy', $value);
    }

    /**
    * Specifies the quality of the images within the exported file, from 0 to 1.
    * @param float $value
    * @return \Kendo\UI\EditorPdf
    */
    public function jpegQuality($value) {
        return $this->setProperty('jpegQuality', $value);
    }

    /**
    * If set to true all PNG images contained in the exported file will be kept in PNG format.
    * @param boolean $value
    * @return \Kendo\UI\EditorPdf
    */
    public function keepPNG($value) {
        return $this->setProperty('keepPNG', $value);
    }

    /**
    * Specifies the keywords of the exported PDF file.
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function keywords($value) {
        return $this->setProperty('keywords', $value);
    }

    /**
    * Set to true to reverse the paper dimensions if needed such that width is the larger edge.
    * @param boolean $value
    * @return \Kendo\UI\EditorPdf
    */
    public function landscape($value) {
        return $this->setProperty('landscape', $value);
    }

    /**
    * Specifies the margins of the page (numbers or strings with units). Supported units are "mm", "cm", "in" and "pt" (default).
    * @param \Kendo\UI\EditorPdfMargin|array $value
    * @return \Kendo\UI\EditorPdf
    */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
    * Specifies the paper size of the PDF document. The default "auto" means paper size is determined by content.Supported values: A predefined size: "A4", "A3" etc; An array of two numbers specifying the width and height in points (1pt = 1/72in) or An array of two strings specifying the width and height in units. Supported units are "mm", "cm", "in" and "pt"..
    * @param string|array $value
    * @return \Kendo\UI\EditorPdf
    */
    public function paperSize($value) {
        return $this->setProperty('paperSize', $value);
    }

    /**
    * The URL of the server side proxy which will stream the file to the end user.A proxy will be used when the browser is not capable of saving files locally, for example, Internet Explorer 9 and Safari.The developer is responsible for implementing the server-side proxy.The proxy will receive a POST request with the following parameters in the request body: contentType: The MIME type of the file; base64: The base-64 encoded file content or fileName: The file name, as requested by the caller.. The proxy should return the decoded file with the "Content-Disposition" header set toattachment; filename="<fileName.pdf>".
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function proxyURL($value) {
        return $this->setProperty('proxyURL', $value);
    }

    /**
    * A name or keyword indicating where to display the document returned from the proxy.If you want to display the document in a new window or iframe, the proxy should set the "Content-Disposition" header to inline; filename="<fileName.pdf>".
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function proxyTarget($value) {
        return $this->setProperty('proxyTarget', $value);
    }

    /**
    * Sets the subject of the PDF file.
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function subject($value) {
        return $this->setProperty('subject', $value);
    }

    /**
    * Sets the title of the PDF file.
    * @param string $value
    * @return \Kendo\UI\EditorPdf
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

//<< Properties
}

?>
