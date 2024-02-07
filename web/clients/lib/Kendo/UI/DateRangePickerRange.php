<?php

namespace Kendo\UI;

class DateRangePickerRange extends \Kendo\SerializableObject {
//>> Properties

    /**
    * This sets the start date of the range selection.
    * @param date $value
    * @return \Kendo\UI\DateRangePickerRange
    */
    public function start($value) {
        return $this->setProperty('start', $value);
    }

    /**
    * This sets the end date of the range selection.
    * @param date $value
    * @return \Kendo\UI\DateRangePickerRange
    */
    public function end($value) {
        return $this->setProperty('end', $value);
    }

//<< Properties
}

?>
