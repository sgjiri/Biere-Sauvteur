<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $order_date = null;

    #[ORM\Column]
    private array $Order_status = [];


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->order_date;
    }

    public function setOrderDate(\DateTimeInterface $order_date): static
    {
        $this->order_date = $order_date;

        return $this;
    }

    public function getOrderStatus(): array
    {
        return $this->Order_status;
    }

    public function setOrderStatus(array $Order_status): static
    {
        $this->Order_status = $Order_status;

        return $this;
    }
}
