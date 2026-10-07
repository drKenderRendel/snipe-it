<?php

namespace App\Models\Labels\Sheets\Avery;

use App\Models\Labels\RectangleSheet;

/**
 * Europe100 / Avery ELA013: 21 labels on A4, 3 columns by 7 rows.
 * Nominal die-cut size: 70 x 42.3 mm. Print at actual size on A4.
 *
 * Keep the content inset because most office printers cannot print
 * all the way to the edge of this nearly edge-to-edge sheet.
 */
class ELA013 extends RectangleSheet
{
    // Required by Snipe-IT versions where Label::preparePDF() is abstract.
    public function preparePDF(\TCPDF $pdf): void
    {
    }

    private const PAGE_WIDTH = 210.0;
    private const PAGE_HEIGHT = 297.0;
    private const LABEL_WIDTH = 70.0;
    private const LABEL_HEIGHT = 42.3;
    private const TOP_MARGIN = 2;
    private const CONTENT_MARGIN = 3.0;
    private const CONTENT_SHIFT_RIGHT = 2.65; // Approximately 10 px at 96 dpi.
    private const QR_SIZE = 29.0;
    private const QR_GAP = 3.0;

    public function getUnit() { return 'mm'; }
    public function getPageWidth() { return self::PAGE_WIDTH; }
    public function getPageHeight() { return self::PAGE_HEIGHT; }
    public function getPageMarginTop() { return self::TOP_MARGIN; }
    public function getPageMarginBottom() { return self::TOP_MARGIN; }
    public function getPageMarginLeft() { return 0; }
    public function getPageMarginRight() { return 0; }
    public function getColumns() { return 3; }
    public function getRows() { return 7; }
    public function getLabelColumnSpacing() { return 0; }
    public function getLabelRowSpacing() { return 0; }
    public function getLabelWidth() { return self::LABEL_WIDTH; }
    public function getLabelHeight() { return self::LABEL_HEIGHT; }
    public function getLabelBorder() { return 0; }
    public function getLabelMarginTop() { return 0; }
    public function getLabelMarginBottom() { return 0; }
    public function getLabelMarginLeft() { return 0; }
    public function getLabelMarginRight() { return 0; }
    public function getSupportAssetTag() { return true; }
    public function getSupport1DBarcode() { return false; }
    public function getSupport2DBarcode() { return true; }
    public function getSupportFields() { return 4; }
    public function getSupportLogo() { return false; }
    public function getSupportTitle() { return true; }

    public function write($pdf, $record)
    {
        if ($record->has('barcode2d')) {
            $barcode = $record->get('barcode2d');
            static::write2DBarcode(
                $pdf,
                $barcode->content,
                $barcode->type,
                self::CONTENT_MARGIN + self::CONTENT_SHIFT_RIGHT,
                self::CONTENT_MARGIN,
                self::QR_SIZE,
                self::QR_SIZE
            );
        }

        $x = self::CONTENT_MARGIN + self::CONTENT_SHIFT_RIGHT + self::QR_SIZE + self::QR_GAP;
        $width = self::LABEL_WIDTH - $x - self::CONTENT_MARGIN;
        $y = self::CONTENT_MARGIN;

        if ($record->has('tag')) {
            static::writeText($pdf, $record->get('tag'), $x, $y, 'freemono', 'B', 3.5, 'L', $width, 4.0, true);
            $y += 5.0;
        }

        if ($record->has('title')) {
            static::writeText($pdf, $record->get('title'), $x, $y, 'freesans', 'B', 3.2, 'L', $width, 3.8, true);
            $y += 4.6;
        }

        foreach ($record->get('fields') as $field) {
            $text = ($field['label'] ? $field['label'].' ' : '').$field['value'];
            static::writeText($pdf, $text, $x, $y, 'freesans', '', 2.9, 'L', $width, 3.5, true);
            $y += 4.0;
        }
    }
}

