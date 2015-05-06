<?php

/**
 * Copyright 2015 DataStax, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cassandra;

use Cassandra\Exception\DomainException;

/**
 * Rows represent a result of statement execution.
 */
final class Rows implements \Iterator, \Countable, \ArrayAccess
{
    /**
     * @return int number of rows
     * @see Countable::count()
     */
    public function count() {}

    /**
     * Resets the rows iterator.
     * @return void
     * @see Iterator::rewind()
     */
    public function rewind() {}

    /**
     * Returns current row.
     *
     * @return array current row
     * @see Iterator::current()
     */
    public function current() {}

    /**
     * Returns current index.
     *
     * @return int index
     * @see Iterator::key()
     */
    public function key() {}

    /**
     * Advances the rows iterator by one.
     * @return void
     * @see Iterator::next()
     */
    public function next() {}

    /**
     * @return bool whether there are more rows available for iteration
     * @see Iterator::valid()
     */
    public function valid() {}

    /**
     * @param int $offset
     * @return bool whether a row at a given index exists
     * @see ArrayAccess::offsetExists()
     */
    public function offsetExists($offset) {}

    /**
     * @param int $offset
     * @return array|null row at a given index
     * @see ArrayAccess::offsetGet()
     */
    public function offsetGet($offset) {}

    /**
     * @param int $offset
     * @param mxied  $value
     * @return void
     * @throws DomainException
     * @see ArrayAccess::offsetSet()
     */
    public function offsetSet($offset, $value) {}

    /**
     * @param int $offset
     * @return void
     * @throws DomainException
     * @see ArrayAccess::offsetUnset()
     */
    public function offsetUnset($offset) {}

    /**
     * @return bool whether this is the last page or not
     */
    public function isLastPage() {}

    /**
     * @param int|null $timeout
     *
     * @return Rows|null loads and returns next result page
     */
    public function nextPage($timeout = null) {}

    /**
     * @return Future returns future of the next result page
     */
    public function nextPageAsync() {}

    /**
     * @return array|null returns first row if any
     */
    public function first() {}
}
