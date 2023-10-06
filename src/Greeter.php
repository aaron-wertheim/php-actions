<?php
class Greeter extends PHPUnit\Framework\TestCase
{
    public function greet(string $name = null):string
    {
        if($name) {
            return "Hello, $name!";
        }
        return "Hello!";
    }

    public function testGreeterSaysHello()
    {
        $this->assertStringContainsString(
            "Hello",
            $this->greet()
        );
    }
    public function testGreeterUsesName()
    {
        $this->assertStringContainsString(
            "Hello, Cody",
            $this->greet("Cody")
        );
        $this->assertStringContainsString(
            "Hello, Sarah",
            $this->greet("Sarah")
        );
    }

}
