<?php

if (PHP_VERSION_ID >= 80000)
{
  trait DebugPDOQueryTrait
  {
    public function query(?string $query = null, ?int $fetchMode = null, mixed ...$fetchModeArgs)
    {
      return $this->doQuery($query, $fetchMode, ...$fetchModeArgs);
    }
  }
}
else
{
  trait DebugPDOQueryTrait
  {
    public function query()
    {
      return $this->doQuery(...func_get_args());
    }
  }
}
