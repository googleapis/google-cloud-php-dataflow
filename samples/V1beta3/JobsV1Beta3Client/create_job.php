<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START dataflow_v1beta3_generated_JobsV1Beta3_CreateJob_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dataflow\V1beta3\Client\JobsV1Beta3Client;
use Google\Cloud\Dataflow\V1beta3\CreateJobRequest;
use Google\Cloud\Dataflow\V1beta3\Job;

/**
 * Creates a Cloud Dataflow job.
 *
 * To create a job, we recommend using `projects.locations.jobs.create` with a
 * [regional endpoint]
 * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints). Using
 * `projects.jobs.create` is not recommended, as your job will always start
 * in `us-central1`.
 *
 * Do not enter confidential information when you supply string values using
 * the API.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function create_job_sample(): void
{
    // Create a client.
    $jobsV1Beta3Client = new JobsV1Beta3Client();

    // Prepare the request message.
    $request = new CreateJobRequest();

    // Call the API and handle any network failures.
    try {
        /** @var Job $response */
        $response = $jobsV1Beta3Client->createJob($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END dataflow_v1beta3_generated_JobsV1Beta3_CreateJob_sync]
