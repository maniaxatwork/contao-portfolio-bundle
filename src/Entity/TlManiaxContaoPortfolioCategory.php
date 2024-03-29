<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TlManiaxContaoPortfolioCategory.
 *
 * @ORM\Entity(repositoryClass="Maniax\ContaoPortfolio\Repository\TlManiaxContaoPortfolioCategoryRepository")
 * @ORM\Table(name="tl_maniax_contao_portfolio_category")
 */
class TlManiaxContaoPortfolioCategory extends DCADefault
{
    /**
     * @ORM\Column(type="integer", options={"unsigned": true})
     */
    protected int $pid;

    /**
     * @ORM\Column(type="integer", options={"unsigned": true})
     */
    protected int $sorting;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $title = '';

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $type = '';

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default": false})
     */
    protected bool $published;

    /**
     * @return int
     */
    public function getPid(): int
    {
        return $this->pid;
    }

    /**
     * @param string $pid
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setPid(string $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * @return int
     */
    public function getSorting(): int
    {
        return $this->sorting;
    }

    /**
     * @param string $sorting
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setSorting(string $sorting): self
    {
        $this->sorting = $sorting;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPublished(): bool
    {
        return $this->published;
    }

    /**
     * @param bool $published
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }
}
