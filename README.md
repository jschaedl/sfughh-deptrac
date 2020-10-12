# deptrac example

## Installation

    $ composer install
    $ symfony server

## Deptrac

    $ vendor/bin/deptrac analyze depfile.yaml
    $ vendor/bin/deptrac analyze depfile.yaml --formatter-graphviz=1
    $ vendor/bin/deptrac analyze depfile.yaml --formatter-console-report-uncovered=1
