<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class StringToDateTimeTransformer implements DataTransformerInterface
{
    public function transform($value): ?string
    {
        if ($value === null) {
            return null;
        }

        return $value->format('Y-m-d H:i:s');
    }

    public function reverseTransform($value): ?\DateTimeInterface
    {
        if ($value === null) {
            return null;
        }

        try {
            return new \DateTime($value);
        } catch (\Exception $e) {
            // Gérer les erreurs si nécessaire
        }

        return null;
    }
}
