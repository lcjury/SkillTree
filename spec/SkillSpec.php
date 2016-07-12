<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SkillSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith("name");
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('Skill');
    }
    function it_should_be_able_to_add_dependency()
    {
        $skill = new \Skill("dummy");
        $this->addDependency($skill);
    }
    function it_should_be_able_to_add_dependant()
    {
        $skill = new \Skill("dummy");
        $this->addDependant($skill);
    }
    function it_should_give_dependencies()
    {
        $this->getDependencies()->shouldReturn([]);
    }

    function it_should_give_dependants()
    {
        $this->getDependants()->shouldReturn([]);
    }
}
