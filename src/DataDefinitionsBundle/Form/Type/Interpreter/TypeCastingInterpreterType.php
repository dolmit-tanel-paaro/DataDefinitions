<?php
/**
 * Data Definitions.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2016-2019 w-vision AG (https://www.w-vision.ch)
 * @license    https://github.com/w-vision/DataDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

declare(strict_types=1);

namespace Wvision\Bundle\DataDefinitionsBundle\Form\Type\Interpreter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Wvision\Bundle\DataDefinitionsBundle\Interpreter\TypeCastingInterpreter;

final class TypeCastingInterpreterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('toType', ChoiceType::class, [
                'choices' => [
                    TypeCastingInterpreter::TYPE_INT => TypeCastingInterpreter::TYPE_INT,
                    TypeCastingInterpreter::TYPE_FLOAT => TypeCastingInterpreter::TYPE_FLOAT,
                    TypeCastingInterpreter::TYPE_STRING => TypeCastingInterpreter::TYPE_STRING,
                    TypeCastingInterpreter::TYPE_BOOLEAN => TypeCastingInterpreter::TYPE_BOOLEAN,
                ],
            ]);
    }
}
