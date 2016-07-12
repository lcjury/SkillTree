<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SkillTreeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SkillTree');
    }
    function it_could_add_skills()
    {
        $a = new \Skill("A");
        $this->addSkill($a);
    }
    function it_should_be_able_to_return_roots()
    {
        $this->getRoots()->shouldReturn([]);
    }

}
