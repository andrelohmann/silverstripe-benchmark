# benchmark

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

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
 * After each Update, set the new Tag
```
git tag -a v1.2.3.4 -m 'Version 1.2.3.4'
git push -u origin v1.2.3.4
```
 * Also update the requirements in andrelohmann/silverstripe-apptemplate