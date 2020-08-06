<?php

namespace Mile\Universe\System;

use Mile\Common\ValueObject\ArrayValue;

final class SystemArray extends ArrayValue
{
   public function create(): self
   {
      return new self(System::class);
   }
}
