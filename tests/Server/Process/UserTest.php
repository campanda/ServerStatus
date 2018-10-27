<?php
declare(strict_types = 1);

namespace Tests\Campanda\Server\Status\Server\Process;

use Campanda\Server\Status\Server\Process\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testInterface()
    {
        $user = new User('foo');

        $this->assertSame('foo', (string) $user);
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\EmptyUserNotAllowed
     */
    public function testThrowWhenEmptyUser()
    {
        new User('');
    }
}
