<?php

class SkillTree
{
    private $skills = [];

    public function getRoots()
    {
        $roots = [];

        return [];
    }

    public function addSkill(Skill $skill)
    {
        $this->skills[] = $skill;
    }

    public function getSkillParents($skill)
    {
        return $this->root[$skill];
    }

}
