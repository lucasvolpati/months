<?php

namespace Months\Html;

class Generator
{
    /**
     * @param string $language
     * @param string $monthFormat | full for complete month name or small for brev name
     * @param string $valueFormat | number (default) or string
     */
    public function __construct(
        private string $language = 'pt_br',
        private string $monthFormat = 'full',
        private string $valueFormat = 'number'
    )
    {}

    /**
     * @param int $id
     * @param string $class
     * @param string $name
     * @param array $dataAtributes
     * @return string
     */
    public function monthsSelectGenerator(
        string $id,
        string $class,
        string $name,
        bool $currentSelected = false,
        array $dataAtributes = null)
    {
        $dataAttr = $dataAtributes ? implode(" ", $dataAtributes) : '';

        $currentYear = (new \DateTime('now'))->format('Y');
        $currentMonth = $currentSelected ? (new \DateTime('now'))->format('m') : '';
        $months = 12;
        $options = "";
        $formatter = '';

        if ($this->language == 'pt_br')
        {
            $formatter = \IntlDateFormatter::create(
                'pt_BR',
                \IntlDateFormatter::FULL,
                \IntlDateFormatter::NONE,
                'America/Sao_Paulo',
                \IntlDateFormatter::GREGORIAN,
                $this->monthFormat == 'small' ? 'MMM' : 'MMMM'
            );
        }

        for ($i = 1; $i <= $months; $i++)
        {
            $digit = $i < 10 ? '0' . $i : $i;
            $currentDate = "{$currentYear}-{$digit}-20";
            $selected = $currentMonth == $digit ? 'selected' : '';
            $formatedMonth = $formatter != ''
                ? ucwords($formatter->format((new \DateTime($currentDate))))
                : (new \DateTime($currentDate))->format($this->monthFormat == 'small' ? 'M' : 'F');

            $value = $this->valueFormat == 'number'
                ? $i
                : strtolower(str_replace("ç", 'c', $formatedMonth));

            $options .= "<option value='{$value}' {$selected}>{$formatedMonth}</option>";
        }

        return "<select id='{$id}' class='{$class}' name='{$name}' {$dataAttr}>{$options}</select>";
    }
}
