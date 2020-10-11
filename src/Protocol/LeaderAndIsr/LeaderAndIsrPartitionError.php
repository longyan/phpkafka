<?php

declare(strict_types=1);

namespace Longyan\Kafka\Protocol\LeaderAndIsr;

use Longyan\Kafka\Protocol\AbstractStruct;
use Longyan\Kafka\Protocol\ProtocolField;

class LeaderAndIsrPartitionError extends AbstractStruct
{
    /**
     * The topic name.
     *
     * @var string
     */
    protected $topicName = '';

    /**
     * The partition index.
     *
     * @var int
     */
    protected $partitionIndex = 0;

    /**
     * The partition error code, or 0 if there was no error.
     *
     * @var int
     */
    protected $errorCode = 0;

    public function __construct()
    {
        if (!isset(self::$maps[self::class])) {
            self::$maps[self::class] = [
                new ProtocolField('topicName', 'string', false, [0, 1, 2, 3, 4], [4], [], [], null),
                new ProtocolField('partitionIndex', 'int32', false, [0, 1, 2, 3, 4], [4], [], [], null),
                new ProtocolField('errorCode', 'int16', false, [0, 1, 2, 3, 4], [4], [], [], null),
            ];
            self::$taggedFieldses[self::class] = [
            ];
        }
    }

    public function getFlexibleVersions(): array
    {
        return [4];
    }

    public function getTopicName(): string
    {
        return $this->topicName;
    }

    public function setTopicName(string $topicName): self
    {
        $this->topicName = $topicName;

        return $this;
    }

    public function getPartitionIndex(): int
    {
        return $this->partitionIndex;
    }

    public function setPartitionIndex(int $partitionIndex): self
    {
        $this->partitionIndex = $partitionIndex;

        return $this;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }
}