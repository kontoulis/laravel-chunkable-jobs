<?php declare(strict_types=1);

namespace Sammyjo20\ChunkableJobs;

interface ChunkableJob
{
    public function handle(): void;

    public function setChunk(?Chunk $chunk): ChunkableJob;

    public function setNextChunk(?Chunk $nextChunk): ChunkableJob;

    public function stopChunking(): ChunkableJob;

    public static function dispatchAllChunks(...$arguments): void;

    public function defineChunk(): ?Chunk;
}
