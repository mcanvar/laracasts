<?php
  /* php 5

    class Foo {
      const BUSINESS_FEE = .2;
      const TAX = .9;
    }

    echo Foo::TAX;

    function add($x, $y, $z)
    {
      return $x + $y + $z;
    }

    namespace Laracasts {
      function sayHi() { echo 'Hi'; }
    }
    namespace {
      use Laracasts as L;
      echo L\sayHi();
    }

 */
  /* php 5.6 */

  // class Foo {
  //   const BUSINESS_FEE = .2;
  //   const TAX = .9 + self::BUSINESS_FEE;
  // }
  // echo Foo::TAX;
  //
  //
  // function add(...$args)
  // {
  //   return array_sum($args);
  // }
  // echo add(1, 5, 7, 9);

  namespace Laracasts {
    const TAX = 0.1;
    function sayHi() { echo 'Hi'; }
  }
  namespace {
    use function Laracasts\sayHi;
    use const Laracasts\TAX;
    echo sayHi() . PHP_EOL;
    echo TAX;
  }
