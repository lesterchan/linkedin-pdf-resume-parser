<?php

namespace LinkedInResumeParser\Pdf;

use Smalot\PdfParser\Font;

/**
 * Class TextLine
 *
 * @package LinkedInResumeParser\Pdf
 */
class TextLine
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @var bool
     */
    protected $bold;

    /**
     * @var bool
     */
    protected $italics;

    /**
     * @var Font
     */
    protected $font;

    /**
     * TextLine constructor.
     *
     * @param string $text
     * @param Font   $font
     */
    public function __construct(string $text, Font $font)
    {
        $this->font = $font;
        $this->bold = $this->isFontBold($font);
        $this->italics = $this->isFontItalics($font);
        $this->text = $text;
    }

    /**
     * @param Font $font
     * @return bool
     */
    protected function isFontBold(Font $font): bool
    {
        $fontName = $font->get('BaseFont')->getContent();
        return stripos($fontName, 'bold') !== false;
    }

    /**
     * @param Font $font
     * @return bool
     */
    protected function isFontItalics(Font $font): bool
    {
        $fontName = $font->get('BaseFont')->getContent();
        return stripos($fontName, 'italic') !== false;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function addText(string $text)
    {
        $this->text .= $text;
    }

    /**
     * @return bool
     */
    public function isBold(): bool
    {
        return $this->bold;
    }

    /**
     * @return bool
     */
    public function isItalics(): bool
    {
        return $this->italics;
    }
}
