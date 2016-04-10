<?php

namespace Form;


use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class MyBooleanTransformer implements DataTransformerInterface
{
    /**
     * The value emitted upon transform if the input is true.
     *
     * @var string
     */
    private $trueValue;

    /**
     * Sets the value emitted upon transform if the input is true.
     *
     * @param string $trueValue
     */
    public function __construct($trueValue)
    {
        $this->trueValue = $trueValue;
    }

    /**
     * Transforms a Boolean into a string.
     *
     * @param bool $value Boolean value.
     *
     * @return string String value.
     *
     * @throws TransformationFailedException If the given value is not a Boolean.
     */
    public function transform($value)
    {
        if (null === $value) {
            return;
        }

        return $value==1 ? $this->trueValue : null;
    }

    /**
     * Transforms a string into a Boolean.
     *
     * @param string $value String value.
     *
     * @return bool Boolean value.
     *
     * @throws TransformationFailedException If the given value is not a string.
     */
    public function reverseTransform($value)
    {
        if (null === $value) {
            return null;
        }

        if (!is_string($value)) {
            throw new TransformationFailedException('Expected a string.');
        }

        return 1;
    }
}