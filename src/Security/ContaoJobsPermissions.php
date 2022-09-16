<?php

declare(strict_types=1);

/*
 * This file is part of contao-jobs-bundle.
 *
 * (c) Stephan Buder 2022 <stephan@maniax-at-work.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/maniaxatwork/contao-jobs-bundle
 */

namespace ManiaxAtWork\ContaoJobsBundle\Security;

final class ContaoJobsPermissions
{
    public const USER_CAN_EDIT_ARCHIVE = 'contao_user.jobs';
    public const USER_CAN_CREATE_ARCHIVES = 'contao_user.jobp.create';
    public const USER_CAN_DELETE_ARCHIVES = 'contao_user.jobp.delete';
}