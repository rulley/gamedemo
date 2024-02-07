<?php

namespace Kendo\UI;

class AutoCompleteMessages extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The text message when hovering the input clear button.
    * @param string $value
    * @return \Kendo\UI\AutoCompleteMessages
    */
    public function clear($value) {
        return $this->setProperty('clear', $value);
    }

    /**
    * The text message shown in the noDataTemplate when no data is available in the widget drop-down.
    * @param string $value
    * @return \Kendo\UI\AutoCompleteMessages
    */
    public function noData($value) {
        return $this->setProperty('noData', $value);
    }

//<< Properties
}

?>
