<?php

namespace Spirit\Skroutz\Model\Config\Source;

class VariationUniqueId implements \Magento\Framework\Data\OptionSourceInterface {
	
	/**
	 * @return array[]
	 */
	public function toOptionArray(): array {
		return [
			[
				'value' => 0,
				'label' => 'Send variation Unique ID'
			],
			[
				'value' => 1,
				'label' => 'Send parent Unique ID'
			]
		];
	}
}