<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CommandNameTranslatorTest extends TestCase {

    protected $commandNameTranslator;


    public function setUp()
    {
        $this->commandNameTranslator = new CommandNameTranslator();
    }

    /* @test */
    public function it_translates_a_command_name_to_its_validator_counterpart()
    {
        $validatorName = $this->commandNameTranslator->toValidatorName('TestArchivedCommand');

        $this->assertEquals('TestArchivedValidator', $validatorName);
    }

    /* @test */
    public function it_returns_baz_if_foobar_provided()
    {
        $validatorName = $this->commandNameTranslator->toValidatorName('foobar');

        $this->assertEquals('TestArchivedValidator', $validatorName);
    }
}
