<?php


class AccessHandlerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(
            \App\AccessHandler::check('admin', 'editor'),
            'Admin users should have access to editor modules'
        );

        $this->assertTrue(
            \App\AccessHandler::check('editor', 'user'),
            'Editor should have access to users modules'
        );

        $this->assertTrue(
            \App\AccessHandler::check('admin', 'admin'),
            'Admin users should have access to admin modules'
        );

        $this->assertFalse(
            \App\AccessHandler::check('user', 'admin'),
            'Users should not have access to admin modules'
        );
    }
}
