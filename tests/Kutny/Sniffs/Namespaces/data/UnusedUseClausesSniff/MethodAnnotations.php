<?php

namespace Kutny\Bundle\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\Mapping as ORM;

class SomeController {

	/**
	 * @ORM\Column(type="string")
	 */
	private $someDoctrineAttribute;

	/**
	 * @Route("/")
	 * @Template()
	 */
	public function showDetailAction() {
	}

}
