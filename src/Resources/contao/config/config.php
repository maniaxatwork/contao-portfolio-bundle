<?php

/*
 * This file is part of contao-jobs-bundle.
 *
 * (c) Stephan Buder 2022 <stephan@maniax-at-work.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/maniaxatwork/contao-jobs-bundle
 */

use Contao\ListWizard;
use Contao\TableWizard;
use ManiaxAtWork\ContaoJobsBundle\ContaoJobs;
use ManiaxAtWork\ContaoJobsBundle\ContaoJobsModel;
use ManiaxAtWork\ContaoJobsBundle\ModuleContaoJobsList;
use ManiaxAtWork\ContaoJobsBundle\ModuleContaoJobsMenu;
use ManiaxAtWork\ContaoJobsBundle\ContaoJobsArchiveModel;
use ManiaxAtWork\ContaoJobsBundle\ModuleContaoJobsReader;

// Back end modules
$GLOBALS['BE_MOD']['content']['jobs'] = array
(
	'tables'      => array('tl_jobs_archive', 'tl_jobs', 'tl_content'),
	'table'       => array(TableWizard::class, 'importTable'),
	'list'        => array(ListWizard::class, 'importList')
);

// Front end modules
$GLOBALS['FE_MOD']['jobs'] = array
(
	'jobslist'    => ModuleContaoJobsList::class,
	'jobsreader'  => ModuleContaoJobsReader::class,
	'jobsarchive' => ModuleContaoJobsArchive::class,
	'jobsmenu'    => ModuleContaoJobsMenu::class
);

// Register hooks
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array(ContaoJobs::class, 'getSearchablePages');


// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'jobs';
$GLOBALS['TL_PERMISSIONS'][] = 'jobp';

// Models
$GLOBALS['TL_MODELS']['tl_jobs_archive'] = ContaoJobsArchiveModel::class;
$GLOBALS['TL_MODELS']['tl_jobs'] = ContaoJobsModel::class;
