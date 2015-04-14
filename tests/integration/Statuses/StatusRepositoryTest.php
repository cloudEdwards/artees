<?php

use Artees\Statuses\StatusRepository;

use Laracasts\TestDummy\Factory as TestDummy;




class StatusRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;
    protected $repo;

    protected function _before()
    {
        $this->repo = new StatusRepository;
    }


    /** @test */
    public function it_gets_all_statuses_for_a_user()
    {
        // Given I have 3 users
        $users = TestDummy::times(2)->create('Artees\Users\User');
        // and statuses for both of them
        TestDummy::times(4)->create(
            'Artees\Statuses\Status',
            ['user_id'=>$users[0]->id,
            'body'=>'my status A']
        );

        TestDummy::times(4)->create(
            'Artees\Statuses\Status',
            ['user_id'=>$users[1]->id,
            'body'=>'my status B']
        );

        // When I fetch statuses for 1 user
        $statusesForUserA = $this->repo->getAllForUser($users[0]);

        $statusesForUserB = $this->repo->getAllForUser($users[1]);

        // I should receive only the relevant ones
        $this->assertCount(4, $statusesForUserA);

        $this->assertEquals('my status A', $statusesForUserA[0]->body);

        $this->assertEquals('my status B', $statusesForUserB[0]->body);
    }


    /** @test */
    public function it_saves_a_status_for_a_user()
    {
        // Given I have an unsaved status
        $status = TestDummy::create(
            'Artees\Statuses\Status',
            ['user_id'=>null,
            'body'=>'my status A']
        );

        // And and existing user
        $user = TestDummy::create('Artees\Users\User');

        // When I try to persist this status
        $savedStatus = $this->repo->save($status, $user->id);

        // Then it should be saved
        $this->tester->seeRecord('statuses', [
            'body'=>'my status A'
        ]);

        // And the status should have correct user_id
        $this->assertEquals($user->id, $savedStatus->user_id);

    }

}