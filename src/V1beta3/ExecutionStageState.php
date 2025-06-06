<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message describing the state of a particular execution stage.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.ExecutionStageState</code>
 */
class ExecutionStageState extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the execution stage.
     *
     * Generated from protobuf field <code>string execution_stage_name = 1;</code>
     */
    protected $execution_stage_name = '';
    /**
     * Executions stage states allow the same set of values as JobState.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.JobState execution_stage_state = 2;</code>
     */
    protected $execution_stage_state = 0;
    /**
     * The time at which the stage transitioned to this state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_state_time = 3;</code>
     */
    protected $current_state_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $execution_stage_name
     *           The name of the execution stage.
     *     @type int $execution_stage_state
     *           Executions stage states allow the same set of values as JobState.
     *     @type \Google\Protobuf\Timestamp $current_state_time
     *           The time at which the stage transitioned to this state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the execution stage.
     *
     * Generated from protobuf field <code>string execution_stage_name = 1;</code>
     * @return string
     */
    public function getExecutionStageName()
    {
        return $this->execution_stage_name;
    }

    /**
     * The name of the execution stage.
     *
     * Generated from protobuf field <code>string execution_stage_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExecutionStageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->execution_stage_name = $var;

        return $this;
    }

    /**
     * Executions stage states allow the same set of values as JobState.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.JobState execution_stage_state = 2;</code>
     * @return int
     */
    public function getExecutionStageState()
    {
        return $this->execution_stage_state;
    }

    /**
     * Executions stage states allow the same set of values as JobState.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.JobState execution_stage_state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExecutionStageState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\JobState::class);
        $this->execution_stage_state = $var;

        return $this;
    }

    /**
     * The time at which the stage transitioned to this state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_state_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCurrentStateTime()
    {
        return $this->current_state_time;
    }

    public function hasCurrentStateTime()
    {
        return isset($this->current_state_time);
    }

    public function clearCurrentStateTime()
    {
        unset($this->current_state_time);
    }

    /**
     * The time at which the stage transitioned to this state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_state_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCurrentStateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->current_state_time = $var;

        return $this;
    }

}

