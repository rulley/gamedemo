<?php

namespace Kendo\UI;

class SchedulerView extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Increases the slot height when containing events up to views.eventsPerDay and reduces its height if there are less events for that specific day.
    * @param boolean $value
    * @return \Kendo\UI\SchedulerView
    */
    public function adaptiveSlotHeight($value) {
        return $this->setProperty('adaptiveSlotHeight', $value);
    }

    /**
    * Sets the allDayEventTemplate option of the SchedulerView.
    * The template used to render the "all day" scheduler events.The fields which can be used in the template are: description String - the event description; end Date - the event end date; resources Array - the event resources; start Date - the event start date or title String - the event title.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function allDayEventTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('allDayEventTemplate', $value);
    }

    /**
    * Sets the allDayEventTemplate option of the SchedulerView.
    * The template used to render the "all day" scheduler events.The fields which can be used in the template are: description String - the event description; end Date - the event end date; resources Array - the event resources; start Date - the event start date or title String - the event title.
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function allDayEventTemplate($value) {
        return $this->setProperty('allDayEventTemplate', $value);
    }

    /**
    * If set to true the scheduler will display a slot for "all day" events.
    * @param boolean $value
    * @return \Kendo\UI\SchedulerView
    */
    public function allDaySlot($value) {
        return $this->setProperty('allDaySlot', $value);
    }

    /**
    * Sets the allDaySlotTemplate option of the SchedulerView.
    * The template used to render the all day slot cell.The fields which can be used in the template are: date - represents the slot date. or resources() - returns the relevant resources for the current slot..
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function allDaySlotTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('allDaySlotTemplate', $value);
    }

    /**
    * Sets the allDaySlotTemplate option of the SchedulerView.
    * The template used to render the all day slot cell.The fields which can be used in the template are: date - represents the slot date. or resources() - returns the relevant resources for the current slot..
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function allDaySlotTemplate($value) {
        return $this->setProperty('allDaySlotTemplate', $value);
    }

    /**
    * The width of the table columns in timeline views. Value is treated as pixels.
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function columnWidth($value) {
        return $this->setProperty('columnWidth', $value);
    }

    /**
    * Sets the dateHeaderTemplate option of the SchedulerView.
    * The template used to render the date header cells.By default the scheduler renders the date using a custom date format - "ddd M/dd". The "ddd" specifier, a.k.a abbreviated name of the week day, will be localized using the current Kendo UI culture. If the developer wants to control the day and month order then one needs to define a custom template.The fields which can be used in the template are: date - represents the major tick date..
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function dateHeaderTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('dateHeaderTemplate', $value);
    }

    /**
    * Sets the dateHeaderTemplate option of the SchedulerView.
    * The template used to render the date header cells.By default the scheduler renders the date using a custom date format - "ddd M/dd". The "ddd" specifier, a.k.a abbreviated name of the week day, will be localized using the current Kendo UI culture. If the developer wants to control the day and month order then one needs to define a custom template.The fields which can be used in the template are: date - represents the major tick date..
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function dateHeaderTemplate($value) {
        return $this->setProperty('dateHeaderTemplate', $value);
    }

    /**
    * Sets the dayTemplate option of the SchedulerView.
    * The template used to render the day slots in month view.The fields which can be used in the template are: date Date - represents the current day or resources() - returns the relevant resources for the current slot..
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function dayTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('dayTemplate', $value);
    }

    /**
    * Sets the dayTemplate option of the SchedulerView.
    * The template used to render the day slots in month view.The fields which can be used in the template are: date Date - represents the current day or resources() - returns the relevant resources for the current slot..
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function dayTemplate($value) {
        return $this->setProperty('dayTemplate', $value);
    }

    /**
    * If set to true the user would be able to create new scheduler events and modify or delete existing ones.Overrides the editable option of the scheduler.
    * @param boolean|\Kendo\UI\SchedulerViewEditable|array $value
    * @return \Kendo\UI\SchedulerView
    */
    public function editable($value) {
        return $this->setProperty('editable', $value);
    }

    /**
    * The end time of the view. The scheduler will display events ending before the endTime.
    * @param date $value
    * @return \Kendo\UI\SchedulerView
    */
    public function endTime($value) {
        return $this->setProperty('endTime', $value);
    }

    /**
    * The height of the scheduler event rendered in month and timeline views. In month view it could be set to a concrete number or to the string value "auto". When set to "auto" it will automatically set the views.adaptiveSlotHeight property to true.
    * @param string|float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function eventHeight($value) {
        return $this->setProperty('eventHeight', $value);
    }

    /**
    * Specifies the distance between individual events.
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function eventSpacing($value) {
        return $this->setProperty('eventSpacing', $value);
    }

    /**
    * Indicates how many events could be listed for a day. When there are more events for a specific day a "more" link will be placed at the bottom of the day slot and will navigate to the day view if clicked.
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function eventsPerDay($value) {
        return $this->setProperty('eventsPerDay', $value);
    }

    /**
    * Sets the eventTemplate option of the SchedulerView.
    * The template used by the view to render the scheduler events.The fields which can be used in the template are: description String - the event description; end Date - the event end date; resources Array - the event resources; start Date - the event start date or title String - the event title.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function eventTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('eventTemplate', $value);
    }

    /**
    * Sets the eventTemplate option of the SchedulerView.
    * The template used by the view to render the scheduler events.The fields which can be used in the template are: description String - the event description; end Date - the event end date; resources Array - the event resources; start Date - the event start date or title String - the event title.
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function eventTemplate($value) {
        return $this->setProperty('eventTemplate', $value);
    }

    /**
    * Sets the eventTimeTemplate option of the SchedulerView.
    * The template used by the agenda view to render the time of the scheduler events.The fields which can be used in the template are: description String - the event description; end Date - the event end date; isAllDay Boolean - if true the event is "all day"; resources Array - the event resources; start Date - the event start date or title String - the event title.
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function eventTimeTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('eventTimeTemplate', $value);
    }

    /**
    * Sets the eventTimeTemplate option of the SchedulerView.
    * The template used by the agenda view to render the time of the scheduler events.The fields which can be used in the template are: description String - the event description; end Date - the event end date; isAllDay Boolean - if true the event is "all day"; resources Array - the event resources; start Date - the event start date or title String - the event title.
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function eventTimeTemplate($value) {
        return $this->setProperty('eventTimeTemplate', $value);
    }

    /**
    * The configuration of the view resource(s) grouping.
    * @param \Kendo\UI\SchedulerViewGroup|array $value
    * @return \Kendo\UI\SchedulerView
    */
    public function group($value) {
        return $this->setProperty('group', $value);
    }

    /**
    * The number of minutes represented by a major tick.
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function majorTick($value) {
        return $this->setProperty('majorTick', $value);
    }

    /**
    * Sets the majorTimeHeaderTemplate option of the SchedulerView.
    * The template used to render the major ticks.By default the scheduler renders the time using the current culture time format.The fields which can be used in the template are: date - represents the major tick date..
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function majorTimeHeaderTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('majorTimeHeaderTemplate', $value);
    }

    /**
    * Sets the majorTimeHeaderTemplate option of the SchedulerView.
    * The template used to render the major ticks.By default the scheduler renders the time using the current culture time format.The fields which can be used in the template are: date - represents the major tick date..
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function majorTimeHeaderTemplate($value) {
        return $this->setProperty('majorTimeHeaderTemplate', $value);
    }

    /**
    * The number of time slots to display per major tick.
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function minorTickCount($value) {
        return $this->setProperty('minorTickCount', $value);
    }

    /**
    * Sets the minorTimeHeaderTemplate option of the SchedulerView.
    * The template used to render the minor ticks.By default the scheduler renders a "&nbsp;".The fields which can be used in the template are: date - represents the major tick date..
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function minorTimeHeaderTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('minorTimeHeaderTemplate', $value);
    }

    /**
    * Sets the minorTimeHeaderTemplate option of the SchedulerView.
    * The template used to render the minor ticks.By default the scheduler renders a "&nbsp;".The fields which can be used in the template are: date - represents the major tick date..
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function minorTimeHeaderTemplate($value) {
        return $this->setProperty('minorTimeHeaderTemplate', $value);
    }

    /**
    * Configures the number of months that will be displayed in the year view calendar.
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function months($value) {
        return $this->setProperty('months', $value);
    }

    /**
    * The name of the view. Typically, used to get the name of the currently selected view via the view method.
    * @param string $value
    * @return \Kendo\UI\SchedulerView
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * If set to true the view will be initially selected by the scheduler widget.
    * @param boolean $value
    * @return \Kendo\UI\SchedulerView
    */
    public function selected($value) {
        return $this->setProperty('selected', $value);
    }

    /**
    * The format used to display the selected date. Uses kendo.format.Contains two placeholders - "{0}" and "{1}" which represent the start and end date displayed by the view.
    * @param string $value
    * @return \Kendo\UI\SchedulerView
    */
    public function selectedDateFormat($value) {
        return $this->setProperty('selectedDateFormat', $value);
    }

    /**
    * The format used to display the selected date when viewport is narrow, and the date is displayed in short ("d") format by default. Uses kendo.format.
    * @param string $value
    * @return \Kendo\UI\SchedulerView
    */
    public function selectedShortDateFormat($value) {
        return $this->setProperty('selectedShortDateFormat', $value);
    }

    /**
    * If set to true the view will be initially shown in business hours mode. By default view is displayed in full day mode.
    * @param boolean $value
    * @return \Kendo\UI\SchedulerView
    */
    public function showWorkHours($value) {
        return $this->setProperty('showWorkHours', $value);
    }

    /**
    * Sets the slotTemplate option of the SchedulerView.
    * The template used to render the time slot cells.The fields which can be used in the template are: date - represents the slot date and time. or resources() - returns the relevant resources for the current slot..
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function slotTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('slotTemplate', $value);
    }

    /**
    * Sets the slotTemplate option of the SchedulerView.
    * The template used to render the time slot cells.The fields which can be used in the template are: date - represents the slot date and time. or resources() - returns the relevant resources for the current slot..
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function slotTemplate($value) {
        return $this->setProperty('slotTemplate', $value);
    }

    /**
    * Configures the start date of the year view. The Scheduler will display 12 months starting from the startDate.
    * @param date $value
    * @return \Kendo\UI\SchedulerView
    */
    public function startDate($value) {
        return $this->setProperty('startDate', $value);
    }

    /**
    * The start time of the view. The scheduler will display events starting after the startTime.
    * @param date $value
    * @return \Kendo\UI\SchedulerView
    */
    public function startTime($value) {
        return $this->setProperty('startTime', $value);
    }

    /**
    * The user-friendly title of the view displayed by the scheduler.
    * @param string $value
    * @return \Kendo\UI\SchedulerView
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
    * Sets the tooltipTemplate option of the SchedulerView.
    * Configures the template used to render the Tooltip in the Scheduler year view.The fields which can be used in the template are: date Date - the selected date from the calendar; events Array - list of the events and their respective resource for the selected date or messages Object - the configuration of the Scheduler messages used for localization..
    * @param string $value The id of the element which represents the kendo template.
    * @return \Kendo\UI\SchedulerView
    */
    public function tooltipTemplateId($value) {
        $value = new \Kendo\Template($value);

        return $this->setProperty('tooltipTemplate', $value);
    }

    /**
    * Sets the tooltipTemplate option of the SchedulerView.
    * Configures the template used to render the Tooltip in the Scheduler year view.The fields which can be used in the template are: date Date - the selected date from the calendar; events Array - list of the events and their respective resource for the selected date or messages Object - the configuration of the Scheduler messages used for localization..
    * @param string $value The template content.
    * @return \Kendo\UI\SchedulerView
    */
    public function tooltipTemplate($value) {
        return $this->setProperty('tooltipTemplate', $value);
    }

    /**
    * The type of the view. The built-in views are: "day", "week", "workWeek", "month", "agenda", "timeline", "timelineWeek", "timelineWorkWeek", "timelineMonth" and "year".
    * @param string $value
    * @return \Kendo\UI\SchedulerView
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
    * Enables the DOM virtualization for vertical grouping of the view - renders batches of DOM elements as you scroll. The views that support this option are: "day", "week", "workWeek", "month".
    * @param boolean $value
    * @return \Kendo\UI\SchedulerView
    */
    public function virtual($value) {
        return $this->setProperty('virtual', $value);
    }

    /**
    * Sets the working days (index based).
    * @param array $value
    * @return \Kendo\UI\SchedulerView
    */
    public function workDays($value) {
        return $this->setProperty('workDays', $value);
    }

    /**
    * The start of working week (index based).
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function workWeekStart($value) {
        return $this->setProperty('workWeekStart', $value);
    }

    /**
    * The end of working week (index based).
    * @param float $value
    * @return \Kendo\UI\SchedulerView
    */
    public function workWeekEnd($value) {
        return $this->setProperty('workWeekEnd', $value);
    }

//<< Properties
}

?>
