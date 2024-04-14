#!/bin/bash

CFG=$1
VER=$2
if [ "x$CFG" = "x" ]; then
  CFG=Debug
fi
if [ "x$VER" = "x" ]; then
  VER=client-trunk
fi

mkdir -p bin/$CFG
cd ./bin/$CFG
if [ -d "Lua" ]; then
  var=$(svn info Lua | grep URL | awk -F'[/]' '{print $(NF-2)}')
  if [ $VER = $var ]; then
    svn update Lua
  else
    rm -rf Lua


if [ -d "client-export" ]; then
  var=$(svn info client-export | grep URL | awk -F'[/]' '{print $(NF-1)}')
  if [ $VER = $var ]; then
    svn update client-export
  else
    rm -rf client-export


