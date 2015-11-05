<?php

class dategroup
{

    function __construct($options = NULL)
    {

        if (!is_array($options)) {
            $options = array();
        }

        $returnData = array();

        //  set defaults
        $defaults['start_date'] = date('Y/m/d');
        $defaults['total_days'] = 99;
    
        $defaults['month_header'] = true;
        $defaults['month_header_el'] = 'h1';
        $defaults['month_header_format'] = 'F Y';
        $defaults['css_calendar_classes'] = '';
        $defaults['css_month_classes'] = 'month';
        $defaults['css_week_classes'] = 'week';
        $defaults['show_prev_weeks_of_month'] = true;

        //  settings
        $this->settings = array_merge($defaults, $options);
        $this->settings['dt_start'] = date('U', strtotime($this->settings['start_date'] . ' 00:00:00'));

        $current['day'] = 0;
        $current['week'] = 0;
        $current['month'] = 0;
        $current['year'] = 0;
        $current['day_id'] = 0;
        $current['week_id'] = 0;
        $current['month_id'] = 0;
        $current['year_id'] = 0;

        $days = array();

        for ($i = 0; $i < $this->settings['total_days']; $i++) {
            $today = array();

            $today['dt'] = $this->settings['dt_start'] + (24 * 60 * 60 * $i);
            $today['date']['date'] = date('Y/m/d', $today['dt']);

            $today['new']['day'] = false;
            $today['new']['week'] = false;
            $today['new']['month'] = false;
            $today['new']['year'] = false;

            if (date('d', $today['dt']) != $current['day']) {
                $current['day_id']++;
                $today['new']['day'] = $current['day'] != 0;
            }
            if (date('W', $today['dt']) != $current['week']) {
                $current['week_id']++;
                $today['new']['week'] = $current['week'] != 0;
            }
            if (date('m', $today['dt']) != $current['month']) {
                $current['month_id']++;
                $today['new']['month'] = $current['month'] != 0;
            }
            if (date('Y', $today['dt']) != $current['year']) {
                $current['year_id']++;
                $today['new']['year'] = $current['year'] != 0;
            }

            $current['day'] = date('d', $today['dt']);
            $current['week'] = date('W', $today['dt']);
            $current['month'] = date('m', $today['dt']);
            $current['year'] = date('Y', $today['dt']);

            $today['group']['day'] = $current['day_id'];
            $today['group']['week'] = $current['week_id'];
            $today['group']['month'] = $current['month_id'];
            $today['group']['year'] = $current['year_id'];

            $today['date']['day'] = $current['day'];
            $today['date']['day-of-week'] = date('w', $today['dt']);
            $today['date']['day-of-week'] = $today['date']['day-of-week'] == 0 ? 7 : $today['date']['day-of-week'];
            $today['date']['month'] = $current['month'];
            $today['date']['year'] = $current['year'];

            $days[] = $today;
        }

        $this->days = $days;
        $this->html = $this->createHtml($days);

        return $returnData;

    }

    function outputMonthHeader($date)
    {
        if ($this->settings['month_header'] == false) {
            return '';
        }
        $HTML = '';
        $HTML .= '<' . $this->settings['month_header_el'] . '>';
        $HTML .= date($this->settings['month_header_format'], strtotime($date));
        $HTML .= '</' . $this->settings['month_header_el'] . '>';

        return $HTML;

    }

    function createHtml($dates)
    {
        $HTML = '';
        $HTML .= '<div id="' . $this->settings['css_calendar_id'] . '" class="' . $this->settings['css_calendar_classes'] . '">'."\n";
        $HTML .= '<div class="' . $this->settings['css_month_classes'] . '">'."\n";

        $HTML .= $this->outputMonthHeader($dates[0]['date']['date']);

        $HTML .= $this->getWeekHeadingsHtml();
        $HTML .= '<div class="' . $this->settings['css_week_classes'] . '">'."\n";
        $HTML .= $this->getEmptyDateCellsHtml($dates[0]['date']['day-of-week'] - 1);

        foreach ($dates as $date) {

            //  if new month then close old and open new
            if ($date['new']['month']) {
                if ($date['date']['day-of-week'] > 1) {
                    $HTML .= $this->getEmptyDateCellsHtml(8 - $date['date']['day-of-week']);
                }
                $HTML .= '</div>';  //  close week
                $HTML .= '</div>';  //  close month
                $HTML .= '<div class="' . $this->settings['css_month_classes'] . '">'; //  open month
                $HTML .= '<h1>'.date('F Y', strtotime($date['date']['date'])).'</h1>'; //  mont title
                $HTML .= $this->getWeekHeadingsHtml();  //  wekday headings
                $HTML .= '<div class="' . $this->settings['css_week_classes'] . '">';  //  new week
                if ($date['date']['day-of-week'] > 1) {
                    $HTML .= $this->getEmptyDateCellsHtml($date['date']['day-of-week'] - 1);
                }
            }

            //  if new week then close old and open new
            if ($date['new']['week'] && !$date['new']['month']) {
                $HTML .= '</div>';  //  close week
                $HTML .= '<div class="' . $this->settings['css_week_classes'] . '">';  //  new week
            }

            //  output date cell
            $HTML .= '<div class="cell date">'.$date['date']['day'].'</div>'."\n";

        }

        $HTML .= '</div>'."\n";
        $HTML .= '</div>'."\n";
        $HTML .= '</div>'."\n";

        return $HTML;

    }

    function getWeekHeadingsHtml()
    {
        $HTML = '';
        $HTML .= '<div class="week week-days">'."\n";
        $HTML .= '<div class="cell">MON</div>'."\n";
        $HTML .= '<div class="cell">TUE</div>'."\n";
        $HTML .= '<div class="cell">WED</div>'."\n";
        $HTML .= '<div class="cell">THU</div>'."\n";
        $HTML .= '<div class="cell">FRI</div>'."\n";
        $HTML .= '<div class="cell">SAT</div>'."\n";
        $HTML .= '<div class="cell">SUN</div>'."\n";
        $HTML .= '</div>'."\n";
        return $HTML;

    }

    function getEmptyDateCellsHtml($number_of_cells)
    {
        $HTML = '';
        for ($i = 0; $i < $number_of_cells; $i++) {
            $HTML .= '<div class="cell date past-date">--</div>'."\n";
        }
        return $HTML;

    }


}

?>