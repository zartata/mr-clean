<?php

namespace MrClean\Test;

class BooleanTest extends TestCase
{

    /** @test */

    public function it_will_convert_a_0_to_false()
    {
        $result = $this->cleaner->scrubbers(['boolean'])
                            ->scrub(0);

        $this->assertSame(false, $result);
    }

    /** @test */

    public function it_will_convert_an_empty_string_to_a_false()
    {
        $result = $this->cleaner->scrubbers(['boolean'])
                            ->scrub('');

        $this->assertSame(false, $result);
    }

    /** @test */

    public function it_will_convert_a_whitespace_string_to_a_false()
    {
        $result = $this->cleaner->scrubbers(['boolean'])
                            ->scrub(' ');

        $this->assertSame(false, $result);
    }

    /** @test */

    public function it_will_convert_a_no_to_a_false()
    {
        $result = $this->cleaner->scrubbers(['boolean'])
                            ->scrub('no');

        $this->assertSame(false, $result);
    }

    /** @test */

    public function it_will_convert_an_n_to_a_false()
    {
        $result = $this->cleaner->scrubbers(['boolean'])
                            ->scrub('n');

        $this->assertSame(false, $result);
    }

    /** @test */

    public function it_will_convert_an_false_to_a_false()
    {
        $result = $this->cleaner->scrubbers(['boolean'])
                            ->scrub('false');

        $this->assertSame(false, $result);
    }

    /** @test */

    public function it_will_convert_anything_else_to_a_true()
    {
        $result = $this->cleaner->scrubbers(['boolean'])
                            ->scrub('cool');

        $this->assertSame(true, $result);
    }

}
