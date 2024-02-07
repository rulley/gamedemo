<?php

namespace Kendo\UI;

class WizardStep extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Adds WizardStepButton to the WizardStep.
    * @param \Kendo\UI\WizardStepButton|array,... $value one or more WizardStepButton to add.
    * @return \Kendo\UI\WizardStep
    */
    public function addButton($value) {
        return $this->add('buttons', func_get_args());
    }

    /**
    * Specifies the HTML string content to be rendered in the step.
    * @param string $value
    * @return \Kendo\UI\WizardStep
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * Specifies the id of a DOM element, which content to be used as a content of the current step.
    * @param string $value
    * @return \Kendo\UI\WizardStep
    */
    public function contentId($value) {
        return $this->setProperty('contentId', $value);
    }

    /**
    * Specifies an endpoint which the step content should be loaded from.
    * @param string $value
    * @return \Kendo\UI\WizardStep
    */
    public function contentUrl($value) {
        return $this->setProperty('contentUrl', $value);
    }

    /**
    * Specifies a custom class that will be set on the step container element.
    * @param string $value
    * @return \Kendo\UI\WizardStep
    */
    public function className($value) {
        return $this->setProperty('className', $value);
    }

    /**
    * Specifies whether the step is enabled or not.
    * @param boolean $value
    * @return \Kendo\UI\WizardStep
    */
    public function enabled($value) {
        return $this->setProperty('enabled', $value);
    }

    /**
    * Defines the Form widget configuration, which will populate the Wizard step content.
    * @param  $value
    * @return \Kendo\UI\WizardStep
    */
    public function form($value) {
        return $this->setProperty('form', $value);
    }

    /**
    * Specifies whether the pager will be rendered on the current step or not.
    * @param boolean $value
    * @return \Kendo\UI\WizardStep
    */
    public function pager($value) {
        return $this->setProperty('pager', $value);
    }

    /**
    * Specifies a title of the current step.
    * @param string $value
    * @return \Kendo\UI\WizardStep
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

//<< Properties
}

?>
