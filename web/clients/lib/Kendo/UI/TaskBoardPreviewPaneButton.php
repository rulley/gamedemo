<?php

namespace Kendo\UI;

class TaskBoardPreviewPaneButton extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The name of the button.
    * @param string $value
    * @return \Kendo\UI\TaskBoardPreviewPaneButton
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * The text of the button.
    * @param string $value
    * @return \Kendo\UI\TaskBoardPreviewPaneButton
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * The icon of the button.
    * @param string $value
    * @return \Kendo\UI\TaskBoardPreviewPaneButton
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * The class name of the icon element.
    * @param string $value
    * @return \Kendo\UI\TaskBoardPreviewPaneButton
    */
    public function spriteCssClass($value) {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
    * The command of the button.
    * @param string $value
    * @return \Kendo\UI\TaskBoardPreviewPaneButton
    */
    public function command($value) {
        return $this->setProperty('command', $value);
    }

    /**
    * The command options of the button.
    * @param string $value
    * @return \Kendo\UI\TaskBoardPreviewPaneButton
    */
    public function options($value) {
        return $this->setProperty('options', $value);
    }

    /**
    * Toggles whether the color of the button to be primary or not.
    * @param boolean $value
    * @return \Kendo\UI\TaskBoardPreviewPaneButton
    */
    public function primary($value) {
        return $this->setProperty('primary', $value);
    }

//<< Properties
}

?>
