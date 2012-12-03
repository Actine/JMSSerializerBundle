<?php
/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 * Copyright 2012 Rafał Wrzeszcz <rafal.wrzeszcz@wrzasq.pl>
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

namespace JMS\SerializerBundle\Templating\Helper;

use JMS\SerializerBundle\Serializer\SerializerInterface;

use Symfony\Component\Templating\Helper\Helper;

/**
 * Serializer PHP helper
 *
 * Basically provides access to JMSSerializer from PHP templates
 */
class Serializer extends Helper
{
    protected $serializer;

    public function getName()
    {
        return 'jms_serializer';
    }

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param mixed $object
     * @param string $type
     * @return string Serialized data
     */
    public function serialize($object, $type = 'json')
    {
        return $this->serializer->serialize($object, $type);
    }
}
