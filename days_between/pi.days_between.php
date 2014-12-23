<?php

$plugin_info = array(
    'pi_name' => 'Thotbox Days Between',
    'pi_author' =>'Shane Woodward',
    'pi_description' => 'Calculates number of days between dates.',
    'pi_version' =>'1.0',
    'pi_usage' => days_between::usage()
);

class days_between {

    public function today() {

        $this->EE =& get_instance();

        $result = '';

        $from_year = $this->EE->TMPL->fetch_param('from_year');
        $from_month = $this->EE->TMPL->fetch_param('from_month');
        $from_day = $this->EE->TMPL->fetch_param('from_day');

        $current_year = date('Y');
        $current_month = date('m');
        $current_day = date('d');

        $invert = $this->EE->TMPL->fetch_param('invert');
        $invert = strtolower($invert);

        $from = gregoriantojd($from_month, $from_day, $from_year); 
        $current = gregoriantojd($current_month, $current_day, $current_year); 
        $result = ($current - $from);

        if ($invert == 'yes') {
            $result = ($result * -1);
        }

        return $result; 

    }
    
    public function dates() {

        $this->EE =& get_instance();

        $result = '';
        
        $from_year = $this->EE->TMPL->fetch_param('from_year');
        $from_month = $this->EE->TMPL->fetch_param('from_month');
        $from_day = $this->EE->TMPL->fetch_param('from_day');

        $to_year = $this->EE->TMPL->fetch_param('to_year');
        $to_month = $this->EE->TMPL->fetch_param('to_month');
        $to_day = $this->EE->TMPL->fetch_param('to_day');

        $invert = $this->EE->TMPL->fetch_param('invert');
        $invert = strtolower($invert);

        $from = gregoriantojd($from_month, $from_day, $from_year); 
        $to = gregoriantojd($to_month, $to_day, $to_year); 
        $result = ($to - $from);

        if ($invert == 'yes') {
            $result = ($result * -1);
        }

        return $result; 

    }

    public function usage() {
        ob_start();
    ?>
        Use {exp:days_between:today from_year="" from_month="" from_day=""} to calculate number of days from today. Use {exp:days_between:dates from_year="" from_month="" from_day="" to_year="" to_month="" to_day=""} to calculate number of days between dates. When using future dates, add invert="yes" to invert negative numbers.
    <?php
        $text = ob_get_contents();
        ob_end_clean();
        return $text;
    }

}

?>