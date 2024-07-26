<?php

namespace Accordous\D4sign\Tests\Unit\Document;

use Accordous\D4sign\Facades\D4Sign;
use Accordous\D4sign\Tests\TestCase;

class DocumentTest extends TestCase
{
    /**
     *
     * @test
     */
    public function verifyGetBalance()
    {

		$file = __DIR__ .'/example.pdf';


		$a = "4f2e2350-bf79-44a6-81bf-bc866a33ed7c";
		$b = $file;
		$c = "88453686-3bd6-4f30-aaaa-775cfcdefd4c";

		$response = D4Sign::documents()->upload($a, $b, $c);

		dd($response);

        $this->assertJson(D4Sign::account()->balance()->getBody()->getContents());
    }
}
