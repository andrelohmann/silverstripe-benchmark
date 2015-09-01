# benchmark

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

## Requirements

Silverstripe 3.2.x

## Introduction

Benchmarking Framework for Silverstripe Application testing under high load circumstances

## Usage

Create a class BenchmarkTest that implements the BenchmarkTestInterface

## Testing with Apache Benchmark

define the Benchmark Key and Secret in _ss_environment.php

use curl to check html output of BenchmarkTest::run()

```
curl -H "BENCHMARK-KEY: YOUR_BENCHMARK_KEY" -H "BENCHMARK-SECRET: YOUR_BENCHMARK_SECRET" HTTP(S)://YOURDOMAIN/benchmark/index
```

use apache benchmark with the added exrtra headers

```
ab -H "BENCHMARK-KEY:  YOUR_BENCHMARK_KEY;BENCHMARK-SECRET: YOUR_BENCHMARK_SECRET" HTTP(S)://YOURDOMAIN/benchmark/index
```

### Notice
This repository uses the git flow paradigm.
After each release cycle, do not forget to push tags, master and develop to the remote origin
```
git push --tags
git push origin develop
git push origin master
```