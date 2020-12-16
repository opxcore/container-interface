<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Container\Interfaces;

use Psr\Container\ContainerInterface as PsrContainerInterface;

interface ContainerInterface extends PsrContainerInterface
{
    /**
     * Register a binding with the container.
     *
     * @param string $abstract
     * @param callable|string|null $concrete
     * @param callable|array|null $parameters
     *
     * @return  $this
     */
    public function bind(string $abstract, $concrete = null, $parameters = null): self;

    /**
     * Register a singleton binding in the container.
     *
     * @param string $abstract
     * @param callable|string|null $concrete
     * @param callable|array|null $parameters
     *
     * @return  $this
     */
    public function singleton(string $abstract, $concrete = null, $parameters = null): self;

    /**
     * Define a contextual binding.
     *
     * @param string|array $concrete
     * @param callable|array $parameters
     *
     * @return  $this
     */
    public function bindParameters($concrete, $parameters): self;

    /**
     * Register an existing instance in the container.
     *
     * @param string $abstract
     * @param mixed $instance
     *
     * @return  $this
     */
    public function instance(string $abstract, $instance): self;

    /**
     * Alias the abstract to a different name.
     *
     * @param string $abstract
     * @param string $alias
     *
     * @return  $this
     */
    public function alias(string $abstract, string $alias): self;

    /**
     * Resolve the abstract from the container.
     *
     * @param string $abstract
     * @param array|callable|null $parameters
     *
     * @return  mixed
     */
    public function make(string $abstract, $parameters = null);
}
